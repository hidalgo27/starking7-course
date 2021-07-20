@props(['course'])
<article class="card">
    <img src="{{ Storage::url($course->image->url) }}" alt="">
    <div class="card-body">
        <h2 class="card-title">{{Str::limit($course->title, 40)}}</h2>
        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>

        <div class="flex">
            <ul class="flex text-sm">
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
            </ul>
            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ({{$course->students_count}})
            </p>

        </div>
        <a href="{{route('courses.show', $course)}}" class="btn-primary btn-block mt-4">Catálgogo de cursos</a>

    </div>
</article>
