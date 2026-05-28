Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/jammy64"
  config.vm.hostname = "webfusion-web"
  config.vm.network "forwarded_port", guest: 80, host: 8081

  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
    vb.cpus = 1
  config.vm.synced_folder ".", "/vagrant"
  end

  config.vm.provision "shell", inline: <<-SHELL

    
    sudo apt update

    sudo apt install -y docker.io docker-compose git
    
    sudo usermod -aG docker vagrant

    cd /vagrant

    docker-compose down 2>/dev/null || true
    docker-compose up -d

  SHELL

end
