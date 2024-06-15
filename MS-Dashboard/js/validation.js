document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('BannerImg').addEventListener('change', validateImage);
});

function validateImage(event) {
    const file = event.target.files[0];
    if (!file) return;

    // Allowed file types and their MIME types
    const allowedTypes = ['image/jpeg', 'image/png'];
    const allowedExtensions = ['jpg', 'jpeg', 'png'];

    // Check file type
    if (!allowedTypes.includes(file.type)) {
        alert('Only JPG, JPEG, and PNG files are allowed.');
        event.target.value = ''; // Clear the input
        return;
    }

    // Check file extension and double extension
    const fileName = file.name.toLowerCase();
    const fileExtension = fileName.split('.').pop();
    const fileBaseName = fileName.slice(0, -(fileExtension.length + 1));
    if (!allowedExtensions.includes(fileExtension) || fileBaseName.includes('.')) {
        alert('Double extension files are not allowed.');
        event.target.value = ''; // Clear the input
        return;
    }

    // Check file signature
    const reader = new FileReader();
    reader.onloadend = function (e) {
        const arr = (new Uint8Array(e.target.result)).subarray(0, 4);
        let header = "";
        for (let i = 0; i < arr.length; i++) {
            header += arr[i].toString(16);
        }
        const signature = header.toLowerCase();
        if (!isValidSignature(signature, file.type)) {
            alert('File signature does not match the file type.');
            event.target.value = ''; // Clear the input
            return;
        }

        // Check resolution
        const img = new Image();
        img.onload = function () {
            if (img.width !== 1400 || img.height !== 700) {
                alert('Image resolution must be 1400x700.');
                event.target.value = ''; // Clear the input
            }
        };
        img.src = URL.createObjectURL(file);
    };
    reader.readAsArrayBuffer(file);
}

function isValidSignature(signature, fileType) {
    const signatures = {
        'image/jpeg': ['ffd8ffe0', 'ffd8ffe1', 'ffd8ffe2'],
        'image/png': ['89504e47']
    };
    return signatures[fileType].includes(signature);
}




// Slot Duration Validation
document.addEventListener('DOMContentLoaded', () => {
    const slotDurationInput = document.getElementById('SlotDuration');

    slotDurationInput.addEventListener('keypress', function (e) {
        if (!isNumberKey(e)) {
            e.preventDefault();
        }
    });

    slotDurationInput.addEventListener('input', function (e) {
        if (this.value.includes('e') || this.value.includes('E')) {
            this.value = this.value.replace(/e/gi, '');
        }
    });
});

function isNumberKey(evt) {
    const charCode = evt.which ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}