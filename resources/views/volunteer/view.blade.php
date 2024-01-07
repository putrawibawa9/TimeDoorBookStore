@extends('layout.main')
@section('container')

<!-- resources/views/your/view.blade.php -->

<table style="width:100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Nationality</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Volunteering History</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Volunteering Start</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Volunteering Period</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($volunteer as $vol)
            <tr>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $vol->name }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $vol->nationality }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $vol->volunteering_history }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $vol->volunteering_start }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $vol->volunteering_start }}</td>
                <!-- Add other columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
