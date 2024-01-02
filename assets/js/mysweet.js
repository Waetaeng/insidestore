// Data Barang flashData
const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	swal.fire({
		icon: "success",
		title: "Data Barang",
		text: flashData,
	});
}

// tombol hapus data barang
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apa kamu yakin ?",
		text: "Data Barang akan dihapus.",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus data!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

// Invoice Flashdata
const flashDataInvoice = $(".flash-data-invoice").data("flashdata");

if (flashDataInvoice) {
	swal.fire({
		icon: "success",
		title: "Data Invoice",
		text: flashDataInvoice,
	});
}

// tombol hapus invoice
$(".hapus-invoice").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apa kamu yakin ?",
		text: "Invoice akan dihapus.",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Hapus!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

// Login Flashdata
const flashDataLogin = $(".flash-data-login").data("flashdata");

if (flashDataLogin) {
	Swal.fire({
		icon: "error",
		title: "Peringatan!",
		text: flashDataLogin,
	});
}

// Registrasi Flashdata
const flashDataRegis = $(".flash-data-regis").data("flashdata");

if (flashDataRegis) {
	Swal.fire({
		icon: "success",
		title: "Selamat!",
		text: flashDataRegis,
	});
}

// Dashboard Flashdata
const flashDataDashboard = $(".flash-data-dashboard").data("flashdata");

if (flashDataDashboard) {
	Swal.fire({
		position: "top-end",
		icon: "success",
		title: "Sukses!",
		text: flashDataDashboard,
		showConfirmButton: false,
		timer: 1500,
	});
}

// Dashboard-admin Flashdata
const flashDataAdmin = $(".flash-data-admin").data("flashdata");

if (flashDataAdmin) {
	Swal.fire({
		position: "top-end",
		icon: "success",
		title: "Sukses!",
		text: flashDataAdmin,
		showConfirmButton: false,
		timer: 1500,
	});
}

// tombol hapus keranjang
$("#hapus-keranjang").on("click", function (e) {
	e.preventDefault();

	const href = $(this).attr("href");

	Swal.fire({
		title: "Apa kamu yakin ?",
		text: "Keranjang akan dihapus.",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, Hapus!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
