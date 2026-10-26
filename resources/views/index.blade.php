@extends('layouts.master')

@section('contents')
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div>
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Products</h5>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"><a class="text-primary hover:text-primary" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="text-[12px] text-textmuted ms-2">/ Products</li>
            </ol>
        </div>
    </div>

    <!-- Your Page Content / Cards / Grids -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">Product List</div>
                </div>
                <div class="box-body">
                    <!-- Table or content here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
