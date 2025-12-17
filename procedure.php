<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color:rgba(255, 255, 255, 0.97); 
    }

    .step-box {
      border-radius: 8px;
      background-color:rgb(218, 218, 218);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .step-box:hover {
      transform: translateY(-5px);
      border: 1px solid #333333;

    }
    .footer {
      background-color: #242324;
      color: white;
      padding: 10px;
      text-align: center;
      margin-top: 20px;
      margin-bottom: 10px;
    }

  </style>
</head>
<body>

  <!-- Header -->
  <header class=" text-black text-center py-6" style="background-color:rgb(250, 255, 255);margin-top:30px;">
    <div class="container">
      <h1 class="" style="font-family:ariel">Adoption Procedure</h1>
      
      
    </div>
  </header>
  <section class="container py-5">
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="step-box p-4 shadow-sm h-100">
          <div class="step-icon text-primary mb-3">
            <i class="bi bi-person-plus-fill fs-1"></i>
          </div>
          <h5>1. Registration</h5>
          <p>Prospective adoptive parents must register through the official adoption portal or agency.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="step-box p-4 shadow-sm h-100">
          <div class="step-icon text-success mb-3">
            <i class="bi bi-file-earmark-text-fill fs-1"></i>
          </div>
          <h5>2. Home Study</h5>
          <p>A licensed social worker visits the home to assess suitability for adoption and provide guidance.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="step-box p-4 shadow-sm h-100">
          <div class="step-icon text-warning mb-3">
            <i class="bi bi-search-heart-fill fs-1"></i>
          </div>
          <h5>3. Child Matching</h5>
          <p>Based on preferences and availability, a suitable child is matched with the adoptive parents.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="step-box p-4 shadow-sm h-100">
          <div class="step-icon text-danger mb-3">
            <i class="bi bi-people-fill fs-1"></i>
          </div>
          <h5>4. Pre-Adoption Foster Care</h5>
          <p>Parents may take care of the child for a trial period under supervision.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="step-box p-4 shadow-sm h-100">
          <div class="step-icon text-info mb-3">
            <i class="bi bi-clipboard-check-fill fs-1"></i>
          </div>
          <h5>5. Legal Process</h5>
          <p>Submission of legal documents and court hearings for the final adoption order.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="step-box p-4 shadow-sm h-100">
          <div class="step-icon text-secondary mb-3">
            <i class="bi bi-house-heart-fill fs-1"></i>
          </div>
          <h5>6. Final Adoption</h5>
          <p>The child officially becomes part of the family with all legal rights and responsibilities.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
    <div class="footer">
    <p>© 2025 kidconnect Adoption. Together we build forever families</p>
  </div>
</body>
</html>
