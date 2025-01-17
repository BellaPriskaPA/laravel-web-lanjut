document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('selengkapnyaButton').addEventListener('click', function() {
    document.getElementById('mainContent').scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const productItems = document.querySelectorAll('.product-item');
    const kategoriWilayah = document.getElementById('kategori-wilayah');
    const breadcrumb = document.getElementById('breadcrumb');

    searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value.toLowerCase();
    productItems.forEach(item => {
        const productName = item.querySelector('.product-name').textContent.toLowerCase();
        if (productName.includes(searchTerm)) {
        item.style.display = 'block';
        } else {
        item.style.display = 'none';
        }
    });
    });

    kategoriWilayah.addEventListener('change', function() {
    const selectedWilayah = kategoriWilayah.options[kategoriWilayah.selectedIndex].text;
    breadcrumb.innerHTML = `
        <a class="hover:underline" href="#">Home</a> /
        <span>UMKM</span> /
        <span>${selectedWilayah}</span>
    `;
    });
});


let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const dots = document.querySelectorAll('.carousel-dot');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const offset = -currentSlide * 100;
    document.getElementById('carouselInner').style.transform = `translateX(${offset}%)`;
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentSlide);
    });
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
});

function showToast() {
    const toast = document.getElementById('toast');
    toast.style.display = 'block';
    setTimeout(() => {
        toast.style.display = 'none';
    }, 3000);

    // Clear the form fields
    document.getElementById('name').value = '';
    document.getElementById('comment').value = '';
}

function toggleComments() {
    const commentsList = document.getElementById('commentsList');
    const showButton = document.querySelector('button[onclick="toggleComments()"]');
    const hideButton = document.getElementById('hideCommentsButton');

    if (commentsList.classList.contains('max-h-64')) {
        commentsList.classList.remove('max-h-64', 'overflow-y-auto');
        showButton.classList.add('hidden');
        hideButton.classList.remove('hidden');
    } else {
        commentsList.classList.add('max-h-64', 'overflow-y-auto');
        showButton.classList.remove('hidden');
        hideButton.classList.add('hidden');
    }
}

function toggleReplyForm(formId) {
const form = document.getElementById(formId);
form.classList.toggle('hidden');
}

function submitReply(event, formId) {
event.preventDefault();
const form = document.getElementById(formId);
const textarea = form.querySelector('textarea');
const replyText = textarea.value.trim();
if (replyText) {
    alert('Balasan terkirim: ' + replyText);
    textarea.value = '';
    form.classList.add('hidden');
} else {
    alert('Balasan tidak boleh kosong.');
}
}

document.addEventListener('DOMContentLoaded', function () {
    const selectElement = document.getElementById('kategori-wilayah');
    const productItems = document.querySelectorAll('.product-item');

    selectElement.addEventListener('change', function () {
        const selectedValue = this.value.toLowerCase();

        productItems.forEach(item => {
            const areaText = item.querySelector('.text-yellow-500').textContent.toLowerCase();
            if (selectedValue === "" || areaText.includes(selectedValue)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});