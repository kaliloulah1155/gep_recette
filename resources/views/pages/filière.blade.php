@extends('master')

@section('title','Filière')
@section('title_content','Filière')

@section('content')
<link rel="stylesheet" href="/DataTables/datatables.css" />
 
<script src="{{asset{assets}}"></script>
/DataTables/datatables.js
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
@endsection