

const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
  e.preventDefault();
  auth.signOut().then(() => {
    console.log('user signed out');
  });
});

const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // get user info
  const email = loginForm['txtEmail'].value;
  const password = loginForm['txtPassword'].value;

  // log the user in
  auth.signInWithEmailAndPassword(email, password).then((cred) => {
    console.log('user logged in');

  });

});

const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // get user info
  const email = signupForm['txtEmail'].value;
  const password = signupForm['txtPassword'].value;

  // sign up the user
  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    console.log('user signed up');
  });
});
