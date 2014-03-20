	<ul class="nav">
    <li><a href="{{ route('home') }}"><i class="icon-home"></i> Home</a></li>
    @if (Sentry::check())
  		<li class="{{ Request::is('admin/pages*') ? 'active' : null }}"><a href="{{ URL::route('admin.pages.index') }}"><i class="icon-book"></i> Pages</a></li>
  		<li class="{{ Request::is('admin/articles*') ? 'active' : null }}"><a href="{{ URL::route('admin.articles.index') }}"><i class="icon-edit"></i> Articles</a></li>
  		<li><a href="{{ URL::route('admin.logout') }}"><i class="icon-lock"></i> Logout</a></li>
    @endif
	</ul>
