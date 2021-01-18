function subjects()
{
  var input= getElementById('grade');
  alert(input);

  //Grade 6 and 7 can only register maths and ict
  if (input.value == '6' || input.value == '7')
  {
    getElementById('mathematics').style.display = '';
    getElementById('ict').style.display = '';
    getElementById('accounting').style.display = 'none';
    getElementById('science').style.display = 'none';
  }

  //Grade 8-12 can register all courses
  else
  {
    getElementById('mathematics').style.display = '';
    getElementById('accounting').style.display = '';
    getElementById('ict').style.display = '';
    getElementById('science').style.display = '';
  }
}
