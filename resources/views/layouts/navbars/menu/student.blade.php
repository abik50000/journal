<li class="nav-item only-mob">
    <a class="nav-link" href="/mobile-menu">
        <i class="fas fa-compass text-primary"></i>
        <span>{{ __('Меню') }}</span> 
    </a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="{{ route('home') }}">
        <i class="fa fa-table text-primary"></i>
        <span>{{ __('Расписание') }}</span> 
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fa fa-graduation-cap text-primary"></i> 
        <span>{{ __('Оценки') }}</span> 
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('student_diary') }}">
        <i class="fa fa-tasks text-primary"></i> 
        <span>{{ __('Домашние задания') }}</span> 
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('student_notifications') }}">
        <i class="fa fa-trophy text-primary"></i> 
        <span>{{ __('Достижения') }}</span> 
    </a>
</li>