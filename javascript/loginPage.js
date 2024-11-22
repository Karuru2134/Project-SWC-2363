
const container = document.querySelector('.container');
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');

signUpButton.addEventListener('click', () => {
  container.classList.add('active');
  document.body.style.background = 'linear-gradient(to right, #ff4b2b, #ff416c)';
});

signInButton.addEventListener('click', () => {
  container.classList.remove('active');
  document.body.style.background = 'linear-gradient(to right, #00c6ff, #0072ff)';
});

