			<nav class="sidebar-nav">
				<ul class="nav">
					<li class="nav-title">Managements</li>
					
					<li class="nav-item">
						<a class="nav-link" href="{{route('category.index')}}">
							<i class="nav-icon cui-list "></i>Категории
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('coin.index')}}">
							<i class="nav-icon cui-briefcase"></i>Добавить монету
						</a>
					</li>
						<li class="nav-item nav-dropdown">
							<a class="nav-link nav-dropdown-toggle" href="#">
								<i class="nav-icon cui-puzzle"></i> Каталог
							</a>
							@php
							/*
							<ul class="nav-dropdown-items">

								<li class="nav-item nav-dropdown">
									<a class="nav-link nav-dropdown-toggle" href="#">
										<i class="nav-icon cui-puzzle"></i>Царская Россия
									</a>
									<ul class="nav-dropdown-items">
										<li class="nav-item">
											<a class="nav-link" href="#">
												<i class="nav-icon cui-puzzle"></i> Николай II
											</a>
										</li>
									</ul>
								</li>
								
								<li class="nav-item nav-dropdown">
									<a class="nav-link nav-dropdown-toggle" href="#">
										<i class="nav-icon cui-puzzle"></i>Украина
									</a>
									<ul class="nav-dropdown-items">
									</ul>
								</li>
								
								<li class="nav-item nav-dropdown">
									<a class="nav-link nav-dropdown-toggle" href="#">
										<i class="nav-icon cui-puzzle"></i>Рим
									</a>
									<ul class="nav-dropdown-items">
									</ul>
								</li>

							</ul>
							*/
						@endphp
						</li>
					<li class="nav-title">Finance</li>
					
				</ul>
			</nav>