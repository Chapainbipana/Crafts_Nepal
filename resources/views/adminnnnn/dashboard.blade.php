<x-app-layout>
    <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>

   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    
                   <div class="container m-5 " style="height: 100%">
                       <div class="row">
                           <div class="col-md-12 mx-auto">
                               <!-- Dashboard Overview -->
                               <div class="row text-center" style="height: 50%">
                                   <div class="col-md-4 mb-3">
                                       <div class="card">
                                           <div class="card-body bg-primary text-white">
                                             <a href="{{route('task.display')}}" class="btn btn-btn-primary"> <h5>{{ $myTasks }} Total Tasks</h5></a> 
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4 mb-3">
                                       <div class="card">
                                           <div class="card-body bg-danger text-white">
                                               <a href="" class="btn btn-btn-danger">  <h5>{{ $overdue }} Overdue</h5></a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4 mb-3">
                                       <div class="card">
                                           <div class="card-body bg-secondary text-white">
                                               <h5>{{ $noDeadline }} No Deadline</h5>
                                           </div>
                                       </div>
                                   </div>
                               </div>
               
                               <!-- Tasks Progress -->
                               <div class="row text-center" style="height: 50%">
                                   <div class="col-md-4 mb-3">
                                       <div class="card">
                                           <div class="card-body bg-warning text-dark">
                                               <h5>{{ $pending }} Pending</h5>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4 mb-3">
                                       <div class="card">
                                           <div class="card-body bg-info text-white">
                                               <h5>{{ $inProgress }} In Progress</h5>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4 mb-3">
                                       <div class="card">
                                           <div class="card-body bg-success text-white">
                                               <h5>{{ $completed }} Completed</h5>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           <div class="row text-center" style="height: 50%">
                               <div class="col-md-4 mb-3">
                                   <div class="card">
                                       <div class="card-body bg-dark text-white">
                                           <h5>{{ $user }} Total user</h5>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           </div>
               

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>