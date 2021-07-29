<x-instructor-layout :course="$course">

{{--    <x-slot name="course">--}}
{{--        {{$course->slug}}--}}
{{--    </x-slot>--}}

    <div class="">
        @livewire('instructor.courses-goals', ['course' => $course], key('course-goals'.$course->id))
    </div>

    <div class="my-8">
        @livewire('instructor.courses-requirements', ['course' => $course], key('course-requirements'.$course->id))
    </div>

    <div class="">
        @livewire('instructor.courses-audiences', ['course' => $course], key('course-audiences' . $course->id))
    </div>

</x-instructor-layout>
