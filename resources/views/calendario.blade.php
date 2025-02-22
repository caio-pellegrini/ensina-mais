<x-app-layout>
    <div class="min-h-screen flex flex-col">
        <div class="flex flex-1">
            <!-- Main Content Centered -->
            <div class="flex-1 flex flex-col justify-center items-center p-4 lg:p-6 ">
                <div class="w-full max-w-3xl rounded-lg p-6 bg-white dark:bg-neutral-800">
                    <header class="flex items-center">
                        <button class="text-gray-500 hover:text-gray-800 focus:outline-none">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <h1 class="text-3xl font-bold mx-4 text-black dark:text-white">Calendário</h1>
                    </header>
                    <hr class="border-t border-gray-300 my-6">
                    <!-- Calendar -->
                    <div class="flex flex-col items-center mt-8 px-4">
                        <div class="flex items-center justify-between w-full max-w-md">
                            <!-- Calendar Navigation Buttons -->
                            <button id="prev-month-btn" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <h2 id="month-year" class="text-gray-800  dark:text-white text-xl font-bold px-2 ">
                                JANEIRO 2024</h2>
                            <button id="next-month-btn" class="text-gray-500 hover:text-gray-800 focus:outline-none">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="mt-4 w-full">
                            <!-- Calendar Days Header -->
                            <div id="calendar-days"
                                class="grid grid-cols-7 sm:grid-cols-7 gap-1 mt-2 text-center text-gray-400 text-xs sm:text-base">
                                <div>D</div>
                                <div>S</div>
                                <div>T</div>
                                <div>Q</div>
                                <div>Q</div>
                                <div>S</div>
                                <div>S</div>
                            </div>
                            <!-- Calendar Body -->
                            <div id="calendar-body"
                                class="grid grid-cols-7 sm:grid-cols-7 gap-2 sm:gap-6 mt-2 text-center">
                                <!-- Days of the month will be populated here -->
                            </div>
                        </div>
                    </div>

                    <!-- Event Form -->
                    <div class="flex flex-col items-center mt-8">
                        <hr class="border-t border-gray-300 my-6">
                        <div class="flex flex-col items-center">
                            <h1 class="text-2xl sm:text-4xl font-bold text-black dark:text-white">Eventos</h1>
                        </div>

                        <div class="flex flex-wrap justify-center items-center  gap-3  mt-4">
                            <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                                <div
                                    class="w-16 h-8 sm:w-20 sm:h-10 bg-red-500  text-white flex items-center justify-center rounded-lg">
                                    <p class="text-center text-sm sm:text-base text-white">03/11</p>
                                </div>
                                <p class="self-center text-sm sm:text-base text-black dark:text-white">ENEM-1° Fase
                                </p>
                            </div>

                            <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                                <div
                                    class="w-16 h-8 sm:w-20 sm:h-10 bg-green-500 text-white flex items-center justify-center rounded-lg">
                                    <p class="text-center text-sm sm:text-base text-white">15/11</p>
                                </div>
                                <p class="self-center text-sm sm:text-base text-black dark:text-white">Unesp-1° Fase
                                </p>
                            </div>

                            <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                                <div
                                    class="w-16 h-8 sm:w-20 sm:h-10 bg-purple-500 text-white flex items-center justify-center rounded-lg">
                                    <p class="text-center text-sm sm:text-base text-white">17/11</p>
                                </div>
                                <p class="self-center text-sm sm:text-base text-black dark:text-white">Fuvest-1°
                                    Fase</p>
                            </div>
                            <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                                <div
                                    class="w-16 h-8 sm:w-20 sm:h-10 bg-red-500 text-white flex items-center justify-center rounded-lg">
                                    <p class="text-center text-sm sm:text-base text-white">10/11</p>
                                </div>
                                <p class="self-center text-sm sm:text-base text-black dark:text-white">ENEM-2° Fase
                                </p>
                            </div>
                            <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                                <div
                                    class="w-16 h-8 sm:w-20 sm:h-10 bg-green-500 text-white flex items-center justify-center rounded-lg">
                                    <p class="text-center text-sm sm:text-base text-white">08/12</p>
                                </div>
                                <p class="self-center text-sm sm:text-base text-black dark:text-white">Unesp-2° Fase
                                </p>
                            </div>
                            <div class="flex items-center space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                                <div
                                    class="w-16 h-8 sm:w-20 sm:h-10 bg-purple-500 text-white flex items-center justify-center rounded-lg">
                                    <p class="text-center text-sm sm:text-base text-white">15/12</p>
                                </div>
                                <p class="self-center text-sm sm:text-base text-black dark:text-white">Fuvest-2°
                                    Fase</p>
                            </div>

                        </div>






                        <!-- Event Suggestions -->
                        <div class="mt-8 flex flex-col">
                            <h3 class="text-center text-xl font-semibold mb-4 text-black dark:text-white">Saiba +
                            </h3>
                            <div class="flex flex-wrap justify-center gap-6">
                                <div class="w-full sm:max-w-xs">
                                    <img src="{{ asset('images/calendario/enem.png') }}" alt="Enem 2024"
                                        class="rounded-lg shadow-lg w-full">
                                    <p class="text-center mt-2 text-black dark:text-white">Enem 2024</p>
                                </div>
                                <div class="w-full sm:max-w-xs">
                                    <img src="{{ asset('images/calendario/fuvest.png') }}" alt="Fuvest 2024"
                                        class="rounded-lg shadow-lg w-full">
                                    <p class="text-center mt-2 text-black dark:text-white">Fuvest 2024</p>
                                </div>
                                <div class="w-full sm:max-w-xs">
                                    <img src="{{ asset('images/calendario/unesp.png') }}" alt="Unesp 2024"
                                        class="rounded-lg shadow-lg w-full">
                                    <p class="text-center mt-2 text-black dark:text-white">Unesp 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Event Definitions
        let eventos2024 = {
            '2024-11-03': 'bg-red-500 text-black',
            '2024-11-10': 'bg-red-500 text-black',
            '2024-11-17': 'bg-purple-500 text-black',
            '2024-12-15': 'bg-purple-500 text-black',
            '2024-11-15': 'bg-green-500 text-black',
            '2024-12-08': 'bg-green-500 text-black',
        };

        const daysInMonth = (month, year) => {
            return new Date(year, month + 1, 0).getDate();
        };

        const getFirstDayOfMonth = (month, year) => {
            return new Date(year, month, 1).getDay();
        };

        let currentMonthIndex = new Date().getMonth();
        let currentYear = new Date().getFullYear();
        const monthNames = ['JANEIRO', 'FEVEREIRO', 'MARÇO', 'ABRIL', 'MAIO', 'JUNHO', 'JULHO', 'AGOSTO', 'SETEMBRO',
            'OUTUBRO', 'NOVEMBRO', 'DEZEMBRO'
        ];
        const monthYearElement = document.getElementById('month-year');
        const calendarBodyElement = document.getElementById('calendar-body');
        const calendarDaysElement = document.getElementById('calendar-days');

        function updateCalendar(monthIndex, year) {
            const monthName = monthNames[monthIndex];
            const days = daysInMonth(monthIndex, year);
            const firstDay = getFirstDayOfMonth(monthIndex, year);

            // Update month and year name
            monthYearElement.textContent = `${monthName} ${year}`;

            // Generate calendar days header if empty
            if (!calendarDaysElement.hasChildNodes()) {
                const daysOfWeek = ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'];
                daysOfWeek.forEach(day => {
                    const dayElement = document.createElement('div');
                    dayElement.textContent = day;
                    calendarDaysElement.appendChild(dayElement);
                });
            }

            // Generate days of the month with the correct weekday
            calendarBodyElement.innerHTML = '';
            for (let i = 0; i < firstDay; i++) {
                const emptyCell = document.createElement('div');
                calendarBodyElement.appendChild(emptyCell);
            }
            for (let day = 1; day <= days; day++) {
                const dateKey = `${year}-${String(monthIndex + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const cor = ``;
                const eventClass = eventos2024[dateKey] || 'bg-gray-200 text-gray-800';
                const dayElement = document.createElement('div');
                dayElement.className = `day text-center cursor-pointer p-2 rounded-lg ${eventClass}`;
                dayElement.textContent = day;
                calendarBodyElement.appendChild(dayElement);
            }
        }

        document.getElementById('next-month-btn').addEventListener('click', () => {
            // Move to next month
            currentMonthIndex = (currentMonthIndex + 1) % 12;
            if (currentMonthIndex === 0) currentYear++;
            updateCalendar(currentMonthIndex, currentYear);
        });

        document.getElementById('prev-month-btn').addEventListener('click', () => {
            // Move to previous month
            currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
            if (currentMonthIndex === 11) currentYear--;
            updateCalendar(currentMonthIndex, currentYear);
        });

        // Initialize the calendar with the current month
        updateCalendar(currentMonthIndex, currentYear);
    </script>
</x-app-layout>
