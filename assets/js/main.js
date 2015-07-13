$(function(){
jQuery('.warrior, .mage, .healer').click(function(){
    jQuery('.warrior, .mage, .healer').removeClass('active');
    jQuery(this).addClass('active');
});
});

function one(){
  $('.inner-left').css('background-image','url(../assets/images/hero.png');
  document.getElementById("tekstLika").innerHTML = "<h1>Čarobnjak</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, </p>";
}

function two(){
  $('.inner-left').css('background-image','url(../assets/images/hero1.png)');
  document.getElementById("tekstLika").innerHTML = "<h1>Liječnik</h1>";
}

function three(){
  $('.inner-left').css('background-image','url(../assets/images/hero2.png)');
  document.getElementById("tekstLika").innerHTML = "<h1>Ratnik</h1>";
}

function oneZ(){
  $('.inner-left').css('background-image','url(../assets/images/hero_z.png');
  document.getElementById("tekstLika").innerHTML = "<h1>Čarobnjak</h1><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, </p>";
}

function twoZ(){
  $('.inner-left').css('background-image','url(../assets/images/hero1_z.png)');
  document.getElementById("tekstLika").innerHTML = "<h1>Liječnik</h1>";
}

function threeZ(){
  $('.inner-left').css('background-image','url(../assets/images/hero2_z.png)');
  document.getElementById("tekstLika").innerHTML = "<h1>Ratnik</h1>";
}

function f22() {
    document.getElementById("content-inner-top").innerHTML = "<div style='margin:20px 50px 0 50px;'><img onload='snapfit.add(this,{aopacity:0.3, mixed:true, level: 1, simple: true, snap: 24});' width='100%' height='100%' src='../assets/images/pozadina.jpg'><h1>Završio sam!</h1></div>"
}

function f1() {
    document.getElementById("wrapper-friends").style.display = "block";
    document.getElementById("map-holder").style.display = "none";
    document.getElementById("map-holder-position6").style.display = "none";
}

function f2() {
    document.getElementById("wrapper-friends").style.display = "none";
    document.getElementById("map-holder").style.display = "block";
    document.getElementById("map-holder-position6").style.display = "none";
}

function glavniGrad(){
    document.getElementById("map-holder-position6").style.display = "block";
    document.getElementById("wrapper-friends").style.display = "none";
    document.getElementById("map-holder").style.display = "none";
}


