<div class="col-12 col-sm-3 col-md-3">
  <div class="profile_sidebar box_shadow">
    <p class="profile_sidebar_title">People Also Suggest</p>
      <!-- items -->
      @foreach ($doctorSuggestion as $item)
      <div class="profile_sidebar_all dis">
        <img class="profile_sidebar_img" src="{{ asset($item->image) }}" src="" title="">
  
        <div class="profile_sidebar_text">
          <p class="profile_sidebar_text_name"><a class="text-dark" href="{{ route('profile', ['id' => $item->id ]) }}"" >{{$item->name}}</a></p>
          <p class="profile_sidebar_text_details">{{$item->specialties}}</p>
        </div>
      </div>
      @endforeach
    
      <!-- items -->

      <!-- items -->
 
      <!-- items -->

      <!-- items -->
    
      <!-- items -->

      <!-- items -->
 
      <!-- items -->

      <!-- items -->

      <!-- items -->
  </div>
</div>