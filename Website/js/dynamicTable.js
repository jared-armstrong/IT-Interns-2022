const survey_options = document.getElementById('survey_options');
const add_more_fields = document.getElementById('add_more_fields');
const remove_fields = document.getElementById('remove_fields');

add_more_fields.onclick = function(){
  const newField = document.createElement('input');
  newField.setAttribute('type','number');
  newField.setAttribute('name','survey_options[]');
  newField.setAttribute('class','survey_options');
  newField.setAttribute('size',50);
  newField.setAttribute('placeholder','Another Field');
  survey_options.appendChild(newField);
}

remove_fields.onclick = function(){
  const input_tags = survey_options.getElementsByTagName('input');
  if(input_tags.length > 2) {
    survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  }
}