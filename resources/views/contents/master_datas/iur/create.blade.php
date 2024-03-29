@extends('layouts.app')

@section('title', 'Upload File')

@section('style')
@endsection

@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('document.index')}}">Master Data</a></li>
        <li class="breadcrumb-item">Upload IUR</li>
    </ul>
@endsection

@section('page_title', 'Upload IUR')

@section('content')
    @include('flash::message')
    {!! Form::open([
            'route' =>  'iur.upload',
            'class' =>  'form-horizontal',
            'id'    =>  'form-document',
            'enctype' => 'multipart/form-data',
        ]) !!}
        <div class="box">
            <div class="box-body">
                @include('contents.master_datas.iur._form')  
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{-- <a href="{{route('iur.upload')}}" class="btn btn-grey">Cancel</a> --}}
                        {{--<button type="button" class="btn btn-success" id="btn-submit-draft">Save as Draft</button>--}}
                        {{-- <button type="button" class="btn btn-primary" id="btn-submit">Publish</button>
                        <button type="button" class="btn btn-primary" id="btn-publish-continue">Publish & Continue</button> --}}
                    </div>
                </div>              
            </div>
        </div>
    </form>
    @stack('models')
@endsection

@section('script')
<script>
    submitForm("{{route('document.store')}}", $('#form-document'), 'create');
</script>
@endsection