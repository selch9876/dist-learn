<?php use Carbon\Carbon; ?>
<div class="col-md-4 col-sm-4">
    <div class="item">
         <div class="courses-thumb">
              <div class="courses-top">
                   <div class="courses-image">
                        <img src="{{ URL::asset('known/images/courses-image3.jpg') }}" class="img-responsive" alt="">
                   </div>
                   <div class="courses-date">
                        <span><i class="fa fa-calendar"></i> {{ $package->created_at }}</span>
                        <span><i class="fa fa-clock-o"></i> {{ Carbon::parse($package->created_at)->diffForHumans(); }}</span>
                   </div>
              </div>

              <div class="courses-detail">
                <h3><a href="{{ route('packages.show', ['package'=>$package->id]) }}">{{ $package->package_name }}</a></h3>
                <p>{{ $package->package_body }}</p>
              </div>
            
              <div class="courses-info">
                   <div class="courses-author">
                    <i class="fa fa-calendar"></i>
                        <span> {{ $package->package_duration }}</span>
                        @if (Auth::check())
                        <a href="{{ route('packages.edit', ['package'=>$package->id]) }}" class="btn btn-success btn-sm">Edit Package</a>
                        <form action="{{ route('packages.destroy', ['package'=>$package->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete Package" class="btn btn-danger btn-sm" onclick="return confirm('You are about to delete this package, proceed?')">
                        </form>
                        @endif
                   </div>
                   <div class="courses-price">
                        <a href="#"><span>{{ $package->package_price }} $</span></a>
                   </div>
              </div>
         </div>
    </div>
</div>