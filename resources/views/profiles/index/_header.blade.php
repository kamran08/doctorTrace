<div class="profile_top box_shadow">
  <!-- cover pic -->
  <img class="cover_pic" src="{{ asset('img/profileCover.jpg') }}"alt="" title="">
  <!-- cover pic -->

  <!-- profile pic -->
  <div class="profile_pic_main">
    <img class="profile_pic" src="{{ asset($doctor->image) }}" alt="" title="">
    <p class="profile_name">{{ $doctor->name}}</p>
  </div> <!-- profile pic -->
</div>