
 @extends('layouts.admin')
 
 
 @section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0 text-dark">Dashboard</h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{ url('/activity') }}">Activity</a></li>
               <li class="breadcrumb-item active">Dashboard </li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>
 <div class="content">
      <div class="span6" id="">
                      <div class="row-fluid">
                         <!-- block -->
                         
                 <div class="empty">
                     <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-info-sign"></i>Profile
                     </div>
                </div>
     <!-- /.content-header -->
                      <div class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <profile></profile>
        </div>
    </div>
</div>
@endsection