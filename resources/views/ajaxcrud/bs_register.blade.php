@extends('layouts.admin')
 
@section('content')
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
 
<div style="margin-left: 2px;">
    <h2 style="margin-top: 12px;" class="alert alert-success">BS Registration</h2><br>
    <div class="row">
        <div class="col-12">
          <a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-post">Add New Member</a> 
          <input type="text" class="form-controller" id="search" name="search" placeholder="Search for..."></input>
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>name</th>
                 <th>gender</th>
                 <th>dob</th>
                 <th>residence</th>
                 <th>phoneno</th>
                 <th>email</th>
                 <th>status</th> 
                 <th>group</th>
                 
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody id="posts-crud">
              @foreach($posts as $post)
              <tr id="post_id_{{ $post->id }}">
                 <td>{{ $post->id  }}</td>
                 <td>{{ $post->name }}</td>
                 <td>{{ $post->gender }}</td>
                 <td>{{ $post->dob }}</td>
                 <td>{{ $post->residence }}</td>
                 <td>{{ $post->phoneno }}</td>
                 <td>{{ $post->email }}</td>
                 <td>{{ $post->status }}</td>
                 <td>{{ $post->group }}</td>
                 
                 <td><a href="javascript:void(0)" id="edit-post" data-id="{{ $post->id }}" class="btn btn-info">Edit</a></td>
                 <td>
                  <a href="javascript:void(0)" id="delete-post" data-id="{{ $post->id }}" class="btn btn-danger delete-post">Delete</a></td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {{ $posts->links() }}
       </div> 
    </div>
</div>
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="postCrudModal"></h4>
    </div>
    <div class="modal-body">
        <form id="postForm" name="postForm" class="form-horizontal">
           <input type="hidden" name="post_id" id="post_id">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">name</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" value="" required="">
                </div>
            </div>

            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Gender</label>
                                  <div class="col-sm-12">
                                      <select class="form-control" id="gender" name="gender"  required="required" type="text">
                                         <option value="Select Gender">Select Gender</option>
                                         <option value="male">male</option>
                                         <option value="Female">Female</option>

                                         </select>
										
										 </div>
										 </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">dob</label>
                <div class="col-sm-12">
                <input class="form-control" id="dob" name="dob"  type="date" placeholder = "Date Of Service..." required>
                </div>
            </div>
 
            <div class="form-group">
                <label class="col-sm-2 control-label">residence</label>
                <div class="col-sm-12">
                    <input class="form-control" id="residence" name="residence" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">phoneno</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="phoneno" name="phoneno" value="" >
                </div>
            </div>
 
            <div class="form-group">
                <label class="col-sm-2 control-label">email </label>
                <div class="col-sm-12">
                    <input class="form-control" id="email" name="email" value="" >
                </div>           
            </div>  
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Status</label>
                                  <div class="col-sm-12">
                                      <select class="form-control" id="status" name="status"  required="required" type="text">
                                      <option value="Select Marital Status">Marital Status</option>
                                         <option value="single">single</option>
                                         <option value="married">married</option>

                                         </select>
										
										 </div>
										 </div>
                                         <div class="form-group">
            <label for="name" class="col-sm-2 control-label">BS Group</label>
                                  <div class="col-sm-12">
                                      <select class="form-control" id="group" name="group"  required="required" type="text">
                                         <option value="Select Gender">Select Group</option>
                                         <option value="A">A</option>
                                         <option value="B">B</option>
										 <option value="C">C</option>
                                         </select>
										
										 </div>
										 </div>
            
 
           
            <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save
             </button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div>
</div>
</div>
</body>
</html>
<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#create-new-post').click(function () {
        $('#btn-save').val("create-post");
        $('#postForm').trigger("reset");
        $('#postCrudModal').html("Add New BS Member");
        $('#ajax-crud-modal').modal('show');
    });
 
    $('body').on('click', '#edit-post', function () {
      var post_id = $(this).data('id');
      $.get('ajax-bs_register/'+post_id+'/edit', function (data) {
         $('#postCrudModal').html("Edit BS Member ");
          $('#btn-save').val("edit-post");
          $('#ajax-crud-modal').modal('show');
          $('#post_id').val(data.id);
          $('#name').val(data.name);
          $('#gender').val(data.gender);  
          $('#dob').val(data.dob);
          $('#residence').val(data.residence);  
          $('#phoneno').val(data.phoneno);
          $('#email').val(data.email);
          $('#status').val(data.status);  
          $('#group').val(data.group);
           
      })
   });

    $('body').on('click', '.delete-post', function () {
        var post_id = $(this).data("id");
        confirm("Are You sure want to delete !");
 
        $.ajax({
            type: "DELETE",
            url: "{{ url('ajax-bs_register')}}"+'/'+post_id,
            success: function (data) {
                $("#post_id_" + post_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });   
  });
 
 if ($("#postForm").length > 0) {
      $("#postForm").validate({
 
     submitHandler: function(form) {

      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');

      
      $.ajax({
          data: $('#postForm').serialize(),
          url: "{{ route('ajax-bs_register.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              var post = '<tr id="post_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.gender +'</td><td>'+ data.dob + 
              '</td><td>' + data.residence + '</td><td>' + data.phoneno + '</td><td>' + data.email + '</td><td>' + data.status + '</td><td>' + data.group + 
                '</td>';
              post += '<td><a href="javascript:void(0)" id="edit-post" data-id="' + data.id + '" class="btn btn-info">Edit</a></td>';
              post += '<td><a href="javascript:void(0)" id="delete-post" data-id="' + data.id + '" class="btn btn-danger delete-post">Delete</a></td></tr>';
               
              
              if (actionType == "create-post") {
                  $('#posts-crud').prepend(post);
              } else {
                  $("#post_id_" + data.id).replaceWith(post);
              }
 
              $('#postForm').trigger("reset");
              $('#ajax-crud-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
  $('#search').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('searchd')}}',
data:{'search':$value},
success:function(data){
$('tbody').html(data);
  
}
});
})
}
   
  
</script>
@endsection