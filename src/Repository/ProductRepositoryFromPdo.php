<?php

namespace Project\Repository;

use Project\Entity\Product;
use PDO;
use Project\Factory\ProductRepositoryFactory;

class ProductRepositoryFromPdo implements ProductRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function create(Product $product): void
    {
        $stmt = $this->pdo->prepare(<<<SQL
        INSERT INTO products
        (id, product_name, product_description, product_price, product_quantity)
        VALUES
        (:id, :product_name, :product_description, :product_price, :product_quantity)
        SQL);

        $id = uniqid('id', true);

        $stmt->execute([
            ':id' => $id,
            ':product_name' => $product->product_name(),
            ':product_description' => $product->product_description(),
            ':product_price' => $product->product_price(),
            ':product_quantity' => $product->product_quantity(),
        ]);
    }
    public function get_all(): array
    {
        $stmt = $this->pdo->prepare(<<<SQL
        SELECT * FROM products
        SQL);

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Product::class);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function find(string $id): Product
    {
        $stm = $this->pdo->prepare(<<<SQL
            SELECT id, product_name, product_description, product_price, product_quantity
            FROM products
            WHERE id=:id
        SQL);

        $stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Product::class);
        $stm->bindParam(':id', $id);
        $stm->execute();

        return $stm->fetch();

    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $params = [
            ':id' => $id,
            ':name' => $name,
            ':description' => $description,
            ':price' => $price,
            ':quantity' => $quantity,
        ];

        $productRepository = ProductRepositoryFactory::make();

        $sql = "UPDATE products SET product_name=:name, product_description=:description, product_price=:price,
                    product_quantity=:quantity 
                    WHERE id=:id";
        $productRepository->pdo->prepare($sql)->execute($params);
    }

    public function delete($id): void
    {
        $id = (string)filter_input(INPUT_GET, 'id');
        $sql = "DELETE FROM products WHERE id=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
