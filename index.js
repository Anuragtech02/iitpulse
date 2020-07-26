const submitForm = (e) => {
  const user = document.getElementById("user").value;
  const std = document.getElementById("std").value;
  const number = document.getElementById("mobile").value;
  const branch = document.getElementById("branch").value;
  e.preventDefault();
  //   console.log(user, std, number, branch);

  const data = {
    user: user,
    std: std,
    number: number,
    branch: branch,
  };

  $.post("contact.php", data, function (result) {
    alert("Successfully submitted :) ");
  });
};
