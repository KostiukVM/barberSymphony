<?php
namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
#[ORM\Id]
#[ORM\GeneratedValue(strategy: "AUTO")]
#[ORM\Column(type: "integer")]
private $id;

#[ORM\Column(type: "datetime")]
private $dateTime;

#[ORM\ManyToOne(targetEntity: Service::class)]
#[ORM\JoinColumn(nullable: false)]
private $service;

#[ORM\ManyToOne(targetEntity: Worker::class)]
#[ORM\JoinColumn(nullable: false)]
private $worker;

// Getters and setters

public function getId(): ?int
{
return $this->id;
}

public function getDateTime(): ?\DateTimeInterface
{
return $this->dateTime;
}

public function setDateTime(\DateTimeInterface $dateTime): self
{
$this->dateTime = $dateTime;

return $this;
}

public function getService(): ?Service
{
return $this->service;
}

public function setService(?Service $service): self
{
$this->service = $service;

return $this;
}

public function getWorker(): ?Worker
{
return $this->worker;
}

public function setWorker(?Worker $worker): self
{
$this->worker = $worker;

return $this;
}
}
