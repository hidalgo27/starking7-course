<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style type="text/css">
        @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
            width: 100%;
            height: 100%;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body style="position: relative">
@if($certification->status == 3)
    @foreach($courses_2 as $course_certifications)

        <img src="{{asset(Storage::url($course_certifications->image))}}" alt="" style="position: absolute; width: 100%; z-index: -1">

        <div style="margin-top: 20%; text-align: center">
            <span style="font-size: 20px; font-weight: bold">Certifica a</span><br>
            <span style="font-size: 50px; font-weight: bold">{{$name}}</span><br>
            <span style="font-size: 20px; margin-top: 20px; display: block">Por participar y aprobar el</span><br>
            <span style="font-size: 30px; font-weight: bold">CURSO DE:</span><br>
            <span style="font-size: 40px; margin-top: 10px; display: block">{{ucwords($course_certifications->title)}}</span><br>
        </div>
        <div style="margin-top: 270px; text-align: center; font-size: 12px !important;">
            <span style="font-size: 20px; font-weight: bold">Certificado de aprobación</span><br>
            <span style="font-size: 20px; font-weight: bold">Con una duración de {{$course_certifications->hours}} culminadas.</span><br>
            <span style="font-size: 20px; font-weight: bold">{{$course_certifications->created_at}}</span><br>
        </div>
        @if($loop->iteration < count($courses_2))
            <div class="page-break"></div>
        @endif

    @endforeach
@endif
@if($certification->status == 2)
    @foreach($courses_1 as $course_certifications)

        <img src="{{asset(Storage::url($course_certifications->image))}}" alt="" style="position: absolute; width: 100%; z-index: -1">

        <div style="margin-top: 20%; text-align: center">
            <span style="font-size: 20px; font-weight: bold">Certifica a</span><br>
            <span style="font-size: 50px; font-weight: bold">{{$name}}</span><br>
            <span style="font-size: 20px; margin-top: 20px; display: block">Por participar y aprobar el</span><br>
            <span style="font-size: 30px; font-weight: bold">CURSO DE:</span><br>
            <span style="font-size: 40px; margin-top: 10px; display: block">{{ucwords($course_certifications->title)}}</span><br>
        </div>
        <div style="margin-top: 270px; text-align: center; font-size: 12px !important;">
            <span style="font-size: 20px; font-weight: bold">Certificado de aprobación</span><br>
            <span style="font-size: 20px; font-weight: bold">Con una duración de {{$course_certifications->hours}} culminadas.</span><br>
            <span style="font-size: 20px; font-weight: bold">{{$course_certifications->created_at}}</span><br>
        </div>
        @if($loop->iteration < count($courses_1))
            <div class="page-break"></div>
        @endif

    @endforeach
@endif
</body>
</html>
