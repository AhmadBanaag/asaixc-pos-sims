@extends('layouts.master')

@section("title")
SIMS | User Management
@endsection

@section('contents')
 <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xxl:col-span-12">
            <div class="box">
              <div class="box-header">
                <div class="flex justify-between">
                  <div class="box-title"> List of Users </div>
                  <div class="hs-dropdown ti-dropdown">
                    <a aria-label="anchor" href="javascript:void(0);"
                      class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                      data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                    </a>
                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">New User</a></li>
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Import Users</a></li>
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Download Users</a></li>
                    </ul>
                  </div>
                </div>
                <p class="text-[.75rem] mb-0 text-textmuted font-normal">Manage the users in your site</p>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table
                    class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                    <thead class="bg-light dark:bg-black/20">
                      <tr>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Name
                          Name</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Email</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Registered Data</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Status</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Role</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $users)
                      <tr>
                        <td>
                          <div class="flex items-center">
                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                  src="../assets/images/ecommerce/01.jpg" alt="" class="rounded-1"> </span> </div>
                            <div class="fs-14">{{$users -> name}}</div> <!--Name-->
                          </div>
                        </td>
                        <td> <span class="fw-semibold">{{$users -> email}}</span> </td> <!--Email-->
                        <td> {{$users -> created_at}} </td> <!--Date Created-->
                        <td> Active </td>
                        <td> <span class="">Student</span> </td> <!--Role-->
                        <td>
                          <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                              class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                              class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                class="ri-delete-bin-7-line"></i> </a> </div>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box-footer !pt-0 !border-t-0">
                <nav aria-label="Page navigation mb-2">
                  <ul class="ti-pagination justify-center sm:justify-end">
                    <li class="page-item disabled">
                      <a class="page-link px-3 py-[0.375rem]">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                    <li class="page-item active"><a class="page-link px-3 py-[0.375rem]"
                        href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                    <li class="page-item">
                      <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>

@endsection