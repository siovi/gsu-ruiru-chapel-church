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
    <h2 style="margin-top: 12px;" class="alert alert-success"> New Believers</h2><br>
    <div class="row">
        <div class="col-12">
          <a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-post">Add New Believer</a> 
          <input type="text" class="form-controller" id="search" name="search" placeholder="Search for..."></input>
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>dob</th>
                 <th>service</th>
                 <th>male_adult</th>
                 <th>female_adult</th>
                 <th>youths</th>
                 <th>sunday_sch</th>
                 <th>total</th> 
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody id="posts-crud">
              @foreach($posts as $post)
              <tr id="post_id_{{ $post->id }}">
                 <td>{{ $post->id  }}</td>
                 <td>{{ $post->dob }}</td>
                 <td>{{ $post->service }}</td>
                 <td>{{ $post->male_adult }}</td>
                 <td>{{ $post->female_adult }}</td>
                 <td>{{ $post->youths }}</td>
                 <td>{{ $post->sunday_sch }}</td>
                 <td>{{ $post->total }}</td>
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
                <label for="name" class="col-sm-2 control-label">dob</label>
                <div class="col-sm-12">
                <input class="form-control" name="dob"  type="date" placeholder = "Date Of Service..." required>
                </div>
            </div>
 
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Service</label>
                                  <div class="col-sm-12">
                                      <select class="form-control" id="service" name="service"  required="required" type="text">
                                      <option value="Select Marital Status">Select Service</option>
                                          <option value="Sunday 1st Service">Sunday 1st Service</option>
                                          <option value="Sunday 2nd Service">Sunday 2nd Service</option>
                                          <option value="Thursday Service">Thursday Service</option>
                                          <option value="Friday Kesha">Friday Kesha</option>
                                          <option value="Samaria HBC Fellowship">Samaria HBC Fellowship</option>
                                          <option value="Jerusalem HBC Fellowship">Jerusalem HBC Fellowship</option>
                                          <option value="Canaan HBC Fellowship">Canaan HBC Fellowship</option>
                                          <option value="Other">Other</option>
                                         </select>
										
										 </div>
										 </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">male_adult</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="male_adult" name="male_adult" value="" required="">
                </div>
            </div>
 
            <div class="form-group">
                <label class="col-sm-2 control-label">female_adult</label>
                <div class="col-sm-12">
                    <input class="form-control" id="female_adult" name="female_adult" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">youths</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="youths" name="youths" value="" >
                </div>
            </div>
 
            <div class="form-group">
                <label class="col-sm-2 control-label">sunday_sch</label>
                <div class="col-sm-12">
                    <input class="form-control" id="sunday_sch" name="sunday_sch" value="" >
                </div>           
            </div>  
            <div class="form-group">
                <label class="col-sm-2 control-label"> total</label>
                <div class="col-sm-12">
                    <input class="form-control" id="total" name="total" value="" >
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
        $('#postCrudModal').html("Add New Attendance");
        $('#ajax-crud-modal').modal('show');
    });
 
    $('body').on('click', '#edit-post', function () {
      var post_id = $(this).data('id');
      $.get('ajax-attendance/'+post_id+'/edit', function (data) {
         $('#postCrudModal').html("Edit Attendance");
          $('#btn-save').val("edit-post");
          $('#ajax-crud-modal').modal('show');
          $('#post_id').val(data.id);
          $('#dob').val(data.dob);
          $('#service').val(data.service);  
          $('#male_adult').val(data.male_adult);
          $('#female_adult').val(data.female_adult);  
          $('#youths').val(data.youths);
          $('#sunday_sch').val(data.sunday_sch);
          $('#total').val(data.total);  
      })
   });

    $('body').on('click', '.delete-post', function () {
        var post_id = $(this).data("id");
        confirm("Are You sure want to delete !");
 
        $.ajax({
            type: "DELETE",
            url: "{{ url('ajax-attendance')}}"+'/'+post_id,
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
          url: "{{ route('ajax-attendance.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              var post = '<tr id="post_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.dob + '</td><td>' + data.service +'</td><td>' + data.male_adult + '</td><td>' + data.female_adult +'</td><td>' + data.youths + '</td><td>' + data.sunday_sch + '</td><td>' + data.total + '</td>';
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
url : '{{URL::to('searchb')}}',
data:{'search':$value},
success:function(data){
$('tbody').html(data);
  
}
});
})
}
   
  
</script>
@endsection