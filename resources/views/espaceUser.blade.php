<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile - Bistro Soleil</title>
  <link rel="stylesheet" href="user.css">
  <style>body {
    font-family: Arial, sans-serif;
    background-color: #fff9f2;
    margin: 0;
    padding: 20px;
  }
  
  .dashboard {
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  }
  
  h1, h2 {
    color: #e67e22;
  }
  
  .profile-section {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
  }
  
  .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 3px solid #e67e22;
  }
  
  .profile-info {
    flex: 1;
  }
  
  .btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #e67e22;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.3s ease;
  }
  
  .btn:hover {
    background-color: #cf6d17;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }
  
  th, td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }
  
  .status {
    font-weight: bold;
  }
  
  .status.delivered {
    color: green;
  }
  
  .status.preparing {
    color: orange;
  }
  .status.delivered {
  color: green;
}

.status.preparing {
  color: orange;
}

.status.canceled {
  color: red;
}

  </style>
</head>
<body>
  <div class="dashboard">
    <h1>Welcome, Sara</h1>

    <div class="profile-section">
     
      <div class="profile-info">.
        <p><strong>Full Name:</strong> Sara B.</p>
        <p><strong>Email:</strong> sara@example.com</p>
        <p><strong>Phone:</strong> +212 6 00 00 00 00</p>
        <p><strong>Address:</strong> 123 Main St, Casablanca</p>
       
      </div>
    </div>

    <div class="order-history">
      <h2>Your Orders</h2>
      <table>
        <tr>
          <th>Order #</th>
          <th>Restaurant</th>
          <th>Address</th>
          <th>Product</th>
          <th>Price</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>1024</td>
          <td>Feane</td>
          <td>123 City Center, Casablanca</td>
          <td>Cheeseburger Menu</td>
          <td>60 MAD</td>
          <td class="status delivered">Delivered</td>
        </tr>
        <tr>
          <td>1025</td>
          <td>Bistro Soleil</td>
          <td>45 Av. Hassan II, Rabat</td>
          <td>Pizza Margherita</td>
          <td>75 MAD</td>
          <td class="status preparing">On the way</td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
