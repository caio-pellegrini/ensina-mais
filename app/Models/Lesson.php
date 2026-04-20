<?php

namespace App\Models;

use App\Traits\HasNameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Spatie\Sluggable\HasSlug;

class Lesson extends Model
{
    use HasFactory;
    use HasNameSlug;
    use HasSlug;

    protected $fillable = ['topic_id', 'name', 'slug', 'link', 'content', 'order', 'is_high_relevance', 'duration'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'students_lessons')->withPivot('is_completed', 'completed_at');
    }

    private $apiKey = 'AIzaSyD5p-OyqWK6GQhdalJd_Egm0HTsvrtBhic';

    public function fetchAndStoreVideoDurations()
    {
        if (! $this->link) {
            return null;
        }

        preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $this->link, $matches);

        if (! isset($matches[1])) {
            return null;
        }

        $videoId = $matches[1];

        $response = Http::get('https://www.googleapis.com/youtube/v3/videos', [
            'id' => $videoId,
            'part' => 'contentDetails',
            'key' => $this->apiKey,
        ]);
        if ($response->successful()) {
            $videoData = $response->json();

            // Verifica se a duração foi retornada e a converte
            if (isset($videoData['items'][0]['contentDetails']['duration'])) {
                $duration = $videoData['items'][0]['contentDetails']['duration'];
                $this->duration = $this->convertDuration($duration);
                $this->save(); // Salva a duração no banco de dados
            }
        }
    }

    private function convertDuration($youtubeDuration)
    {
        $interval = new \DateInterval($youtubeDuration);

        // Converte para o formato H:i:s
        $hours = $interval->h;
        $minutes = $interval->i;
        $seconds = $interval->s;

        if ($hours > 0) {
            $minutes += $hours * 60; // Adiciona as horas aos minutos
        }

        // Retorna o formato min:seg, sem os zeros extras
        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }
}
