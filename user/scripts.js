// Simulated notice data
var noticeData = {
    title: "Important Notice",
    content: "Admission deadline has been extended to August 31, 2023."
  };
  
  // Update the notice text
  function updateNotice() {
    var noticeText = document.getElementById("noticeText");
    noticeText.textContent = noticeData.content;
  }
  
  // Wait for the DOM to be fully loaded
  document.addEventListener("DOMContentLoaded", function() {
    updateNotice();
  });
  