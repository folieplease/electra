@extends('layouts.app')

@section('title', 'Create JV Period')

@section('style')
@endsection

@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('jvperiod.index')}}">JV Period</a></li>
        <li class="breadcrumb-item">Create</li>
    </ul>
@endsection

@section('page_title', 'Create JV Period')

@section('content')
    @include('flash::message')
    {!! Form::open([
            'route' =>  'jvperiod.store',
            'class' =>  'form-horizontal',
            'id'    =>  'form-jvperiod',
            'enctype' => 'multipart/form-data',
        ]) !!}
        <div class="box">
            <div class="box-body">
                @include('contents.gl.jvperiod._form')  
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="{{route('jvperiod.index')}}" class="btn btn-grey">Cancel</a>
                        <button type="button" class="btn btn-success" id="btn-submit-draft">Save as Draft</button>
                        <button type="submit" class="btn btn-primary" id="btn-submit">Publish</button>
                        <button type="button" class="btn btn-primary" id="btn-publish-continue">Publish & Continue</button>
                    </div>
                </div>              
            </div>
        </div>
    </form>
@endsection

@section('script')
<script>
$(document).on('click', '#btn-submit-draft', function() {
    var url = $('#form-jvperiod').attr('action');
    $('#form-jvperiod').attr('action', url + '?is_draft=true');
    $('#form-jvperiod').submit();
});
$(document).on('click', '#btn-publish-continue', function() {
    var url = $('#form-jvperiod').attr('action');
    $('#form-jvperiod').attr('action', url + '?is_publish_continue=true');
    $('#form-jvperiod').submit();
});
</script>
@endsection