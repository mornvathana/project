
    const btncheckout = document.getElementById('checkout');

    btncheckout.addEventListener("click",data);

    // end button action 
    const form = document.getElementById("checkoutForm");
    const firstName = document.getElementById("first-name");
    const lastName = document.getElementById("last-name");
    const email = document.getElementById("email");
    const city = document.getElementById("city");
    const address = document.getElementById("address");
    const phoneNumber = document.getElementById("phone-number");
    const userId = document.getElementById("user_id");
    const CartId = document.getElementById("cart_id");
    const shippingMethod = document.getElementById("shippingMethod");
    const discode = document.getElementById("discode");

    let hasSubmitted = false;

    form.addEventListener("input",checkFields);
    shippingMethod.addEventListener("change", checkFields);

    function checkFields() {
        if (
            firstName.value.trim() !== "" &&
            lastName.value.trim() !== "" &&
            email.value.trim() !== "" &&
            city.value.trim() !== "" &&
            address.value.trim() !== "" &&
            phoneNumber.value.trim() !== "" &&
            shippingMethod.value !== "" &&
            !hasSubmitted
        ) {
            hasSubmitted = true;
            setTimeout(function () {
                alert("Please make payment!");
                btncheckout.style.display = "block";
            }, 1000);
        }
    };
    
    function data(){
    const KHQR = typeof BakongKHQR !== 'undefined' ? BakongKHQR : null;

    if (!KHQR) {
        console.error("BakongKHQR or its components are not loaded or defined.");
        return;
    }
    let score = 0;
    const data = KHQR.khqrData;
    const info = KHQR.IndividualInfo;

    const totalPrice = parseFloat(btncheckout.dataset.total);

    if(totalPrice < 100){
        score = 1;
    }else if(totalPrice >= 100 && totalPrice <= 200){
        score = 2;
    }else if(totalPrice >= 200 && totalPrice <= 300){
        score = 3;
    }


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
            shipping : shippingMethod.value,
            totalPrice: totalPrice,
            discount : discode.value,
            scorecus : score,
        };

        fetch('save_checkout_data.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
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

    const optionalData = {
        currency: data.currency.usd,
        amount: totalPrice,
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

    // Function to show modal (Tailwind-compatible)
    function showModal() {
        const modal = document.getElementById("qrCodeModal");
        modal.classList.remove("hidden");
    }

    function closeModal() {
        const modal = document.getElementById("qrCodeModal");
        modal.classList.add("hidden");
    }
    window.closeModal = closeModal;

    // Display QR code on canvas
    const displayQRCode = () => {
        if (!individual?.data?.qr) {
            console.error("QR code data is not available.");
            return;
        }

        const qrCodeCanvas = document.getElementById("qrCodeCanvas");
        QRCode.toCanvas(qrCodeCanvas, individual.data.qr, (error) => {
            if (error) {
                console.error("Error generating QR code:", error);
                return;
            }

            showModal(); 
            const md5Value = individual?.data?.md5;
            if (md5Value) startQrCodeScanner(md5Value);
        });
    };

    displayQRCode();

    

    let checkTransactionInterval;
    let transition = false;

    function startQrCodeScanner(md5Value) {
        checkTransactionInterval = setInterval(() => {
            fetchTransactionStatus(md5Value);
        }, 2000);
    };
    

    

    const fetchTransactionStatus = (md5) => {
        const token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImlkIjoiZjNkMDc4M2EyOTY4NDExYSJ9LCJpYXQiOjE3NDk5NzE4NDksImV4cCI6MTc1Nzc0Nzg0OX0.t9Tl-NRUnL9-uz9xEfXcko5qMiu3ysmPEHJM1nhfwCg';
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

                const token_telegram = "7948926578:AAH13fuvJf_wUOFr2fNo8YGFIZzJvuUvSX0";
                const chat_id = "1985070836";
                const order_number = "7777"; 
                const imageUrl = "https://cdn.vectorstock.com/i/500p/25/50/order-now-modern-web-banner-with-package-icon-vector-31212550.jpg";
                
                const url = `https://api.telegram.org/bot${token_telegram}/sendPhoto`;
                
                const payload = {
                    chat_id: chat_id,
                    photo: imageUrl,
                    caption: `🚨 *New Order Alert* 🚨 \n\n🆔 *Order ID:* ${order_number}\n👤 *Customer Name:* ${firstName.value} ${lastName.value}\n📧 *Email:* ${email.value}\n\n📦*Order Detail*\n\n💵 *Total Price*: $${totalPrice}\n🏠 *Delivery Address*: ${address.value}, ${city.value}\n📱 *Contact Number*: ${phoneNumber.value}\n✅ *Thank you for your purchase*`,
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
                            window.location.href = 'http://localhost:8080/project/project_team/profile.php';
                        }
                    } catch (error) {
                        console.error("Fetch error:", error);
                    }
                };


                if(!transition){
                    transition = true;
                    sendMessage();
                    autoSaveData();
                }
            
            
            } else {
                console.log("Transaction pending...");
            }
        })
        .catch(error => {
            console.error("Transaction check failed:", error);
            clearInterval(checkTransactionInterval);
        });
    };
    }