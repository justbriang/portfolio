{!! Form::open(['route'=>'store','method'=>'POST','files' => true]) !!}

<div class="form-group">

    {{form::label('title', 'Job-Title')}}

    {{form::Text('title','',['class' =>'form-control','placeholder'=>'Title'])}}

</div>

<div class="form-group">

        {{form::label('description', 'Job-Description')}}

        {{form::Textarea('description','',['class' =>'form-control','placeholder'=>'Description'])}}
</div>
<div class="form-group">

    {{form::label('tech_stack', 'Job-Description')}}

    {{form::Textarea('tech_stack','',['class' =>'form-control','placeholder'=>'tech_stack'])}}
</div>
<div class="form-group">

    {{form::label('GithubUrl', 'GithubUrl')}}

    {{form::Textarea('GithubUrl','',['class' =>'form-control','placeholder'=>'GithubUrl'])}}
</div>

<div class="form-group">
    <div class="form-group">
        <label for="recipient-name" class="col-form-label">Image:</label>
        <input type="file"name="image" class="form-control" id="recipient-name">
      </div>
</div>

{{Form::submit('Post Vacancy',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
