

// sign up

const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = signupForm['txtEmail'].value;
  const password = signupForm['txtPassword'].value;

  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    console.log(cred.user);
  });

});

const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
  e.preventDefault();
  auth.signOut().then(() => {
    console.log('user signed out');
  })
});


