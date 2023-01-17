@extends('dashboard.dashboard')
@section('content')
<div class="container content">  
  <form id="create-form" action="" method="POST">
    <input type="hidden" name="csrf_test_name" value="d1ce9cf6b9987582e60bb6d90477551d" />        
    <div class="mb-4 bg-white text-center">
        <div class="mt-2 form-logo-label bg-white"><strong class="bg-white">Form Create Book</strong></div>
    </div>
      <fieldset>
          <label class="title" for="">Title</label>
          <input placeholder="Enter the book title" type="text" name="title">
      </fieldset>
      
      <fieldset>
        <label class="title" for="">Writer</label>
        <input placeholder="Enter the author's name" type="text" name="writer">
      </fieldset>
    
      <fieldset>
        <label  class="title" for="">Publisher</label>
        <input placeholder="Enter the publisher name" type="text" name="publisher">
      </fieldset>

      <fieldset>
          <label class="title" for="">Synopsis</label>
          <textarea name="description" placeholder="Type your descriptions here..." tabindex="5"></textarea>
      </fieldset>
      <fieldset>
        <button type="submit" >Submit</button>
    </fieldset>
  </form>
</div>
@endsection