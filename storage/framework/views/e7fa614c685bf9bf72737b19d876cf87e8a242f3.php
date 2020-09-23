<?php echo Form::open(['route'=>'store','method'=>'POST','files' => true]); ?>


<div class="form-group">

    <?php echo e(form::label('title', 'Job-Title')); ?>


    <?php echo e(form::Text('title','',['class' =>'form-control','placeholder'=>'Title'])); ?>


</div>

<div class="form-group">

        <?php echo e(form::label('description', 'Job-Description')); ?>


        <?php echo e(form::Textarea('description','',['class' =>'form-control','placeholder'=>'Description'])); ?>

</div>
<div class="form-group">

    <?php echo e(form::label('GithubUrl', 'GithubUrl')); ?>


    <?php echo e(form::Textarea('GithubUrl','',['class' =>'form-control','placeholder'=>'GithubUrl'])); ?>

</div>
<div class="form-group">

    <?php echo e(form::label('tech_stack', 'Job-Description')); ?>


    <?php echo e(form::Textarea('tech_stack','',['class' =>'form-control','placeholder'=>'tech_stack'])); ?>

</div>

<div class="form-group">
    <div class="form-group">
        <label for="recipient-name" class="col-form-label">Image:</label>
        <input type="file"name="image" class="form-control" id="recipient-name">
      </div>
</div>

<?php echo e(Form::submit('Post Vacancy',['class'=>'btn btn-primary'])); ?>

<?php echo Form::close(); ?>

<div class="row">
<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/portfolio/create.blade.php ENDPATH**/ ?>