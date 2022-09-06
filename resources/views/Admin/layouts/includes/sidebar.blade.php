<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="list-group list-group-flush">
        <li
        @if (Route::currentRouteName() == 'editInfo')
            class="active"
        @endif
        >
            <a href="{{ route('editInfo') }}">{{ __('Persenol Info Section') }}</a>
        </li>
        <li
        @if (Route::currentRouteName() == 'skills')
            class="active"
        @endif
        >
            <a href="{{ route('skills') }}">{{ __('Skills Section') }}</a>
        </li>
        <li
        @if (Route::currentRouteName() == 'showProjects')
            class="active"
        @endif
        >
            <a href="{{ route('showProjects') }}">{{ __('Projects Section') }}</a>
        </li>
        <li
        @if (Route::currentRouteName() == 'showWorks')
            class="active"
        @endif
        >
            <a href="{{ route('showWorks') }}">{{ __('Work Expereince Section') }}</a>
        </li>
        <li
        @if (Route::currentRouteName() == 'showLangs')
            class="active"
        @endif
        >
            <a href="{{ route('showLangs') }}">{{ __('Speaking Language Section') }}</a>
        </li>
    </ul>
</div>

