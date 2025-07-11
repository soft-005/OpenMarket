<x-app-layout>
     <div class="col-9 panel panel-default">
        @include('layouts.error')

        <div class="panel-heading">
            Edit Settings
        </div>
        <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="site_name">App Name</label>
                <input type="text" id="site_name" value="{{ $settings->site_name }}" name="site_name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" value="{{ $settings->contact_number }}" name="contact_number" class="form-control" />
            </div>
            <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="text" id="contact_email" value="{{ $settings->contact_email }}" name="contact_email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" value="{{ $settings->address }}" name="address" class="form-control" />
            </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-xs btn-info">
                Update Settings
            </button>
        </div>
        </form>
    </div>
     
</x-app-layout>