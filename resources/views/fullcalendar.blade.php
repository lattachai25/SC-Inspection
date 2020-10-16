{{-- @extends('layouts.admin_layout') --}}
{{-- @section('title', 'Edit Inspection Report') --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="row" style="text-align:center; font-size:1em; color:red; background-color: #00385B; margin-top:-20px;">
    <div class="col-3">
        <br>
        <a href="{{ route('edit.index') }}"><button class="btn btn-warning" type="submit" style="margin-top: 5%"><< ย้อนกลับ</button></a>
        <br>
    </div>
    <div class="col-6">
        <br>
            <h2 style="color:#ffffff">Calendar Plan</h2>
        <br>
    </div>
</div>


<table align="center" width="45%" style="margin-top: 1%">
    <tr>
        <td>
            <div id='calendar'></div>
        </td>
    </tr>
</table>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here


            events : [
                @foreach($tasks as $task)
                {

                    // title : '{{ $task->dealer_name }}'+"\nเวลา : "+'{{ $task->inspectiontime }}'+"\nติดต่อ : "+'{{ $task->tel }}',
                    title : '{{ $task->dealer_name }}'+"\nเวลา : "+'{{ $task->inspectiontime }}',
                    start : '{{ $task->inspectiondate }}',
                    backgroundColor : "#1B8FFF",
                    textColor : "#ffffff",

                    url : '{{ route('appointment.show', $task->id) }}'
                    // url : window.location.href+"?Heha"

                    // onkeyup : '{{ $task->dealer_name }}'+" / ( "+'{{ $task->tel }}'+" ) "+"\nเวลา : "+'{{ $task->inspectiontime }}'+"\nติดต่อ : "
                    //             +'{{ $task->tel_contact }}'+" ( คุณ : "+'{{ $task->contact }}'+" )\n"
                    //             +'{{ $task->name_brand }}'+" / "+'{{ $task->name_model }}'+" ( สี : "+'{{ $task->car_color }}'+" )\n"
                    //             +"ทะเบียน : "+'{{ $task->carregnum }}'
                },
                @endforeach
            ]
            // eventClick: function (event) {
            //     @foreach($tasks as $task)
            //     {
            //         alert('{{ $task->dealer_name }}'+" / ( "+'{{ $task->tel }}'+" ) "+"\nเวลา : "+'{{ $task->inspectiontime }}'+"\nติดต่อ : "
            //             +'{{ $task->tel_contact }}'+" ( คุณ : "+'{{ $task->contact }}'+" )\n"
            //             +'{{ $task->name_brand }}'+" / "+'{{ $task->name_model }}'+" ( สี : "+'{{ $task->car_color }}'+" )\n"
            //             +"ทะเบียน : "+'{{ $task->carregnum }}'),
            //     },
            //     @endforeach

            //   }

        })
    });
</script>
<body>

</body>
</html>


{{-- @endsection --}}
