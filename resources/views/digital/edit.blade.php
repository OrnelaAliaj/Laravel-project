@extends('employee.create')
 @section('editId',$item->id) 

@section('Create employee data')
        Edit employee data
        @stop
@section('editName', $item->name)
@section('editSurname', $item->surname)
@section('editAge', $item->age)
@section('editPosition', $item->position)
@section('editMethod')
    {{method_field('PUT')}}
@endsection