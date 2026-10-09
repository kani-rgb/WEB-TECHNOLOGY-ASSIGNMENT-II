const form = document.getElementById('registrationForm');
const setError = (id, message) => document.getElementById(id).textContent = message;
form.addEventListener('submit', (e) => {
  e.preventDefault();
  ['nameError','rollError','emailError','courseError','passwordError','fileError'].forEach(id=>setError(id,''));
  document.getElementById('successMessage').textContent='';
  let valid=true;
  const name=document.getElementById('name').value.trim();
  const roll=document.getElementById('rollNumber').value.trim();
  const email=document.getElementById('email').value.trim();
  const course=document.getElementById('course').value;
  const password=document.getElementById('password').value;
  const file=document.getElementById('file').files[0];
  if(!name){setError('nameError','Name is required.');valid=false;}
  if(!roll){setError('rollError','Roll number is required.');valid=false;}
  if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)){setError('emailError','Enter a valid email.');valid=false;}
  if(!course){setError('courseError','Select a course.');valid=false;}
  if(!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/.test(password)){setError('passwordError','Password must be 8+ chars with upper, lower, number and symbol.');valid=false;}
  if(file && file.size>2*1024*1024){setError('fileError','File must be 2 MB or smaller.');valid=false;}
  if(file && !['image/jpeg','image/png','application/pdf'].includes(file.type)){setError('fileError','Only JPG, PNG or PDF files are allowed.');valid=false;}
  if(valid) document.getElementById('successMessage').textContent='Registration validated successfully!';
});
