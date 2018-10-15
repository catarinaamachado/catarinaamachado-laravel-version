@extends('layouts.app')

@section('title', 'Catarina Machado')

@section('ajust', 'style="width: 98%"')

@section('header')
	<h1>JOURNEY</h1>
@endsection

@section('body')
	<table border="0" width="100%"
		cellpadding="10">
	<tr>
		<td width="50%" valign="top">
			<div align="left">
				<br/><br/><h2>EDUCATION</h2>
				<img src="images/uminho.png" width="15" height="15">
				<a href="http://miei.di.uminho.pt/"><b class="black_bold_text">Integrated Master’s Degree in Computer Software Engineering</b></a>,
				<br/><a href="https://www.uminho.pt/">University of Minho</a>, Braga, 3rd year.<br/><br/>
			</div>

			<div align="left">
				<h2>EXPERIENCE</h2>

				<img src="images/ynnovation.png" width="15" height="15">
				<b class="black_bold_text">Summer Intern</b>,
				<a href="https://ynnovbooking.com/">Ynnovation</a>, Braga.<br/>

				<img src="images/efacec.png" width="15" height="15">
				<b class="black_bold_text">Influencer</b>,
				<a href="http://www.efacec.pt/">Efacec</a>, Porto.<br/><br/>
			</div>

			<div align="left">
				<h2>VOLUNTEER EXPERIENCE</h2>

				<img src="images/coderdojo.png" width="15" height="15">
				<b class="black_bold_text">Mentor</b>,
				<a href="https://coderdojo.com/">CoderDojo Braga</a>, Braga.<br/>

				<img src="images/cesium.png" width="15" height="15">
				<b class="black_bold_text">Communications Department Co-Director</b>,
				<a href="http://www.cesium.di.uminho.pt/">CeSIUM</a>,<br/>
				University of Minho.<br/><br/>
			</div>

			<div align="left">
				<h2>EVENTS</h2>

				<img src="images/cesium.png" width="15" height="15">
				<b class="black_bold_text">Articles Writer</b>,
				<a href="https://issuu.com/cesiuminho/docs/logcesium10">log/CeSIUM magazine</a>, Braga.<br/>

				<img src="images/sei.png" width="15" height="15">
				<b class="black_bold_text">Volunteer Staff</b>,
				<a href="http://seium.org/">SEI- Semana da Engenharia Informática 2018</a>, Braga.<br/>

				<img src="images/join.png" width="15" height="15">
				<b class="black_bold_text">Volunteer Staff</b>,
				<a href="http://join.di.uminho.pt/">JOIN- Jornadas de Informática 2018</a>, Braga.<br/><br/>
			</div>
		</td>

		<td width="50%" valign="top">
			<div align="left">
				<br/><br/><h2>SKILLS</h2>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:88%">
					<span class="progress-type">&ensp; C</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:85%">
					<span class="progress-type">&ensp; Java</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:85%">
					<span class="progress-type">&ensp; Haskell</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:60%">
					<span class="progress-type">&ensp; HTML/CSS</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:50%">
					<span class="progress-type">&ensp; PHP</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="progress-type">&ensp; Laravel</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:40%">
					<span class="progress-type">&ensp; R</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:20%">
					<span class="progress-type">&ensp; JavaScript</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:13%">
					<span class="progress-type">&ensp; MySQL</span>
				  </div>
				</div><br/>

				<div id="myProgress">
				  <div id="myBar"
					aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="progress-type">&ensp; LaTeX</span>
				  </div>
				</div><br/>

			</div>
		</td>

	</tr>
	</table><br/>

@endsection

@section('footer')
	<ul class="icons">
		<li><a href="{{ route('frontend.begin') }}" class="fa-long-arrow-left">Back</a></li>
	</ul>
@endsection
