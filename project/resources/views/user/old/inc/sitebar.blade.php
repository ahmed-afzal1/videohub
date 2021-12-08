<div class="col-xl-3 col-md-5">
    <div class="user-sidebar">
        <ul>
          <li>
              <a class="{{ Request::url() == route('user-dashboard') ? 'active' : '' }}" href="{{ route('user-dashboard') }}"><i class="far fa-clock"></i>{{ __('Dashboard') }}</a>
          </li>
            <li>
                <a class="{{ Request::url() == route('user-favarite') ? 'active' : '' }}" href="{{route('user-favarite')}}"><i class="far fa-heart"></i>{{ __('Favarite') }}</a>
            </li>
            
            <li>
                <a class="{{ Request::url() == route('user-profile') ? 'active' : '' }}" href="{{ route('user-profile') }}"><i class="far fa-edit"></i>{{ __('Update Profile') }}</a>
            </li>
            <li>
                <a class="{{ Request::url() == route('user-reset') ? 'active' : '' }}" href="{{route('user-reset')}}"><i class="fas fa-unlock-alt"></i>{{ __('Change Password') }}</a>
            </li>
            <li>
                <a class="{{ Request::url() == route('user-reviews') ? 'active' : '' }}" href="{{route('user-reviews')}}"><i class="fas fa-unlock-alt"></i>{{ __('My Reviews') }}</a>
            </li>
            <li>
                <a class="{{ Request::url() == route('user.message') ? 'active' : '' }}" href="{{route('user.message')}}"><i class="fas fa-unlock-alt"></i>{{ __('Message') }}</a>
            </li>
            <li>
                <a href="{{route('user-logout')}}"><i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}</a>
            </li>
        </ul>
    </div>
</div>