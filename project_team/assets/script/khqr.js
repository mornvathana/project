document.addEventListener("DOMContentLoaded", function () {
    const KHQR = typeof BakongKHQR !== 'undefined' ? BakongKHQR : null;
    
    if (!KHQR) {
        console.error("BakongKHQR or its components are not loaded or defined.");
        return;
    }
    
    const data = KHQR.khqrData;
    const info = KHQR.IndividualInfo;
     // total price
     const btncheckout = document.getElementById('checkout');
     const totalPrice = parseFloat(btncheckout.dataset.total);
    // handle form 
    const form = document.getElementById("checkoutForm");
    const firstName = document.getElementById("first-name");
    const lastName = document.getElementById("last-name");
    const email = document.getElementById("email");
    const city = document.getElementById("city");
    const address = document.getElementById("address");
    const phoneNumber = document.getElementById("phone-number");
    const userId = document.getElementById("user_id");
    const CartId = document.getElementById("cart_id");

    let hasSubmitted = false; 

    form.addEventListener("input", function () {
        if (
        firstName.value.trim() !== "" &&
        lastName.value.trim() !== "" &&
        email.value.trim() !== "" &&
        city.value.trim() !== "" &&
        address.value.trim() !== "" &&
        phoneNumber.value.trim() !== "" &&
        !hasSubmitted
        ) {
        hasSubmitted = true; 
        setTimeout(function () {
            alert("Please make payment!");
            btncheckout.style.display = "block";
        }, 5000); 
        }
    });
    // auto save 
    function autoSaveData() {
        const formData = {
            first_name: firstName.value,
            last_name: lastName.value,
            email: email.value,
            userid: userId.value,
            cartid: CartId.value,
            city: city.value,
            address: address.value,
            phone_number: phoneNumber.value,
            totalPrice: totalPrice,
        };

        fetch('save_checkout_data.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            console.log('Data saved successfully:', data);
        })
        .catch(error => {
            console.error('Error saving data:', error);
        });
    }
    // end handle data

    const optionalData = {
    currency: data.currency.usd,
    amount:totalPrice, 
    mobileNumber: "85512233455",
    storeLabel: "Coffee Shop",
    terminalLabel: "Cashier_1",
    purposeOfTransaction: "oversea",
    languagePreference: "km",
    merchantNameAlternateLanguage: "ចន ស្មីន",
    merchantCityAlternateLanguage: "សៀមរាប",
    upiMerchantAccount: "0001034400010344ABCDEFGHJIKLMNO"
    };
    
    const individualInfo = new info("morn_sovathana1@amkb", "morn sovathana", "PHNOM PENH", optionalData);
    const khqrInstance = new KHQR.BakongKHQR();
    const individual = khqrInstance.generateIndividual(individualInfo);
    
    // Function to display QR code in the modal
    const displayQRCode = () => {
        if (!individual?.data?.qr) {
            console.error("QR code data is not available.");
            return;
        }
    
        const qrCodeCanvas = document.getElementById("qrCodeCanvas");
        if (!qrCodeCanvas) {
            console.error("QR code canvas element not found.");
            return;
        }
    
        // Generate QR code and display it on the canvas
        QRCode.toCanvas(qrCodeCanvas, individual.data.qr, (error) => {
            if (error) {
                console.error("Error generating QR code:", error);
            }
        });
    
        // Show the modal
        const qrCodeModal = new bootstrap.Modal(document.getElementById("qrCodeModal"));
        qrCodeModal.show();
    };
    
    // Attach click event to the QR image/button
    const checkoutButton = document.getElementById("checkout");
    if (checkoutButton) {
        checkoutButton.addEventListener("click", displayQRCode);
    } else {
        console.warn("Checkout button not found.");
    }
    
    let checkTransactionInterval;
    
    // Function to poll transaction status
    const startQrCodeScanner = (md5Value) => {
        if (!md5Value) {
            console.error("Md5 value is not available.");
            return;
        }
    
        checkTransactionInterval = setInterval(() => {
            fetchTransactionStatus(md5Value);
        }, 2000);
    };
    
    // Handle modal open event
    $('#qrCodeModal').on('shown.bs.modal', function () {
        const md5Value = individual?.data?.md5; // Replace with actual md5 generation logic if needed
        startQrCodeScanner(md5Value);
    });
    
    // Fetch transaction status
    const fetchTransactionStatus = (md5) => {
        const token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImlkIjoiZjNkMDc4M2EyOTY4NDExYSJ9LCJpYXQiOjE3NDE3OTg1MzEsImV4cCI6MTc0OTU3NDUzMX0.PqTaMkbpl68zKI_6G9ApsnRmoAQjUF_IfEo2LfVKH8M'; // Replace with your actual token
        const url = 'https://api-bakong.nbc.gov.kh/v1/check_transaction_by_md5';
    
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`,
            },
            body: JSON.stringify({ md5 }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.responseMessage === 'Success') {
                    clearInterval(checkTransactionInterval);
                    // save data function 
                    autoSaveData();
                    window.location.href = 'http://localhost:8080/project/project_team/profile.php';
                    // for telegram message
                    const token_telegram = "7948926578:AAH13fuvJf_wUOFr2fNo8YGFIZzJvuUvSX0";
                    const chat_id = "1985070836";
                    const order_number = "7777"; 
                    const imageUrl = "https://cdn.vectorstock.com/i/500p/25/50/order-now-modern-web-banner-with-package-icon-vector-31212550.jpg";
                    
                    const url = `https://api.telegram.org/bot${token_telegram}/sendPhoto`;
                    
                    const payload = {
                        chat_id: chat_id,
                        photo: imageUrl,
                        caption: `🚨 *New Order Alert* 🚨 \n\n🆔 *Order ID:* ${order_number}\n👤 *Customer Name:* vathana\n📧 *Telegram:* 010456518\n\n📦*Order Detail*\n\n📦 *Product Name:* Oppo\n💵 *Total Price*: $500\n🏠 *Delivery Address*: Svay Rieng\n📱*Contact Number*: 010456518\n🚚 *Delivery Method:* J&T\n\n✅ *Thank you for your puchased*`,
                        parse_mode: "Markdown"
                    };
                    let message = false;
                    const sendMessage = async () => {
                        if(message) return;
                        message = true;
                        try {
                            const response = await fetch(url, {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify(payload)
                            });
                    
                            const data = await response.json();
                            
                            if (data.ok) {
                                console.log("Message sent successfully!");
                            }
                        } catch (error) {
                            console.error("Fetch error:", error);
                        }
                    };
                    
                    // Call the function to send the message
                    sendMessage();



                } else {
                    console.log("Transaction status unknown.");
                }
            })
            .catch(error => {
                console.error("Error checking transaction status:", error);
                clearInterval(checkTransactionInterval);
            });
    };
});