<aside class="sidebar">
    <a href="admin_dashbord.php?tab=dashboard" class="nav-item <?php echo $active_tab === 'dashboard' ? 'active' : ''; ?>">
        <i class="fas fa-chart-line"></i> Dashboard Metrics
    </a>
    <a href="admin_dashbord.php?tab=employees" class="nav-item <?php echo $active_tab === 'employees' ? 'active' : ''; ?>">
        <i class="fas fa-users-cog"></i> Manage Employees
    </a>
    <a href="admin_dashbord.php?tab=products" class="nav-item <?php echo $active_tab === 'products' ? 'active' : ''; ?>">
        <i class="fas fa-boxes"></i> Product Inventory
    </a>
    <a href="admin_dashbord.php?tab=sales" class="nav-item <?php echo $active_tab === 'sales' ? 'active' : ''; ?>">
        <i class="fas fa-file-invoice-dollar"></i> View Sales Ledger
    </a>
    <a href="admin_dashbord.php?tab=security" class="nav-item <?php echo $active_tab === 'security' ? 'active' : ''; ?>">
        <i class="fas fa-shield-halved"></i> Gate Security Logs
    </a>
    <a href="admin_dashbord.php?tab=suppluyer" class="nav-item <?php echo $active_tab === 'suppluyer' ? 'active' : ''; ?>">
        <i class="fas fa-truck"></i> Suppliers
    </a>
    <div style="margin-top: auto; border-top: 1px solid var(--glass-border); padding-top: 20px;">
        <a href="index.php?action=logout" class="nav-item" style="color: #ff4d4d;">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</aside>
