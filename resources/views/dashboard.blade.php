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
                                <div class="row text-center" style="height: 50%">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body bg-primary text-white">
                                              <a href="" class="btn btn-btn-primary"> <h5> Total product</h5></a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body bg-danger text-white">
                                                <a href="" class="btn btn-btn-danger">  <h5>total user</h5></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body bg-secondary text-white">
                                                <h5> No Deadline</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                        
                                <div class="row text-center" style="height: 50%">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body bg-warning text-dark">
                                                <h5> Pending</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body bg-info text-white">
                                                <h5>In Progress</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body bg-success text-white">
                                                <h5> Completed</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                            <div class="row text-center" style="height: 50%">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body bg-dark text-white">
                                            <h5> Total user</h5>
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
