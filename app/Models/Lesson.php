<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Lesson extends Model
{
    use HasFactory;
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

    private function fetchAndStoreVideoDurations(): void
    {
        if (! $this->link) {
            return;
        }

        preg_match("/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/", $this->link, $matches);

        if (! isset($matches[1])) {
            return;
        }

        $videoId = $matches[1];

        $response = Http::get('https://www.googleapis.com/youtube/v3/videos', [
            'id' => $videoId,
            'part' => 'contentDetails',
            'key' => config('services.youtube.key'),
        ]);

        if ($response->successful()) {
            $videoData = $response->json();

            if (isset($videoData['items'][0]['contentDetails']['duration'])) {
                $duration = $videoData['items'][0]['contentDetails']['duration'];
                $this->duration = $this->convertDuration($duration);
                $this->save();
            }
        }
    }

    private function convertDuration(string $youtubeDuration): string
    {
        $interval = new \DateInterval($youtubeDuration);

        $hours = $interval->h;
        $minutes = $interval->i;
        $seconds = $interval->s;

        if ($hours > 0) {
            $minutes += $hours * 60;
        }

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
