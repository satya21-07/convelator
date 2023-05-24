const firstName = document.getElementById("fname");
const lastName = document.getElementById("lname");
const subject = document.getElementById("subject");
const submitBtn = document.getElementById("submit");

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'action.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onload = () => {
    if (xhr.status === 200) {
      alert('Thanks for your query! We will get back to you soon.');
      form.reset();
    } else {
      alert('Oops! Something went wrong. Please try again later.');
    }
  };
  xhr.send(new URLSearchParams(formData).toString());
});