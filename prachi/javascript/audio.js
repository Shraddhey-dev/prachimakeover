
           // Create a new audio element
    const audio = new Audio('../images/audio1.mpeg');
    audio.loop = true; // Optional: Loop the audio

    // Get the button element
    const audioBtn = document.getElementById('audioBtn');

    // Function to toggle play and mute
    audioBtn.addEventListener('click', function() {
      if (audio.paused || audio.muted) {
        // If audio is paused or muted, play and unmute the audio
        audio.play();
        audio.muted = false;
        // Change button icon to "volume-up" (unmute)
        audioBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
      } else {
        // If audio is playing, mute the audio
        audio.muted = true;
        // Change button icon to "volume-mute" (mute)
        audioBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
      }
    });
  