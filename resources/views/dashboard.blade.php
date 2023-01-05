<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Congratulations {{Auth::user()->firstname}}, {{ __("you're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    This is your User Dashboard for all of your data. This will include options to export all collected data we have on you in the future.
                    <br><br>If you have any requests or queries, please contact the Lead Developer, <u><a href="mailto:joshua.micallef@horiziontutoring.com.au?subject=Data Query: SSO Site">Joshua Micallef</a></u> with your query.
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <b>Some places you can go and will automatically be logged in.</b>
                    <i>Remember work is WIP on these sites. Bugs can be expected almost everywhere.</i>
                    <br><u><a target="_blank" href="http://admin.horizontutoring.com.au/">Admin | Horizon Tutoring</a></u>
                    <br><u><a target="_blank" href="http://dashboard.horizontutoring.com.au/">Dashboard | Horizon Tutoring (WIP)</a></u>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <b>More Details:</b>
                    <br>Coming Soon!!
                    
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
