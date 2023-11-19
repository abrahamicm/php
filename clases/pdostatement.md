```php
class PDOStatement implements IteratorAggregate {
/* Properties */
public string $queryString;
/* Methods */
public bindColumn(
    string|int $column,
    mixed &$var,
    int $type = PDO::PARAM_STR,
    int $maxLength = 0,
    mixed $driverOptions = null
): bool
public bindParam(
    string|int $param,
    mixed &$var,
    int $type = PDO::PARAM_STR,
    int $maxLength = 0,
    mixed $driverOptions = null
): bool
public bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool
public closeCursor(): bool
public columnCount(): int
public debugDumpParams(): ?bool
public errorCode(): ?string
public errorInfo(): array
public execute(?array $params = null): bool
public fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0): mixed
public fetchAll(int $mode = PDO::FETCH_DEFAULT): array
public fetchAll(int $mode = PDO::FETCH_COLUMN, int $column): array
public fetchAll(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs): array
public fetchAll(int $mode = PDO::FETCH_FUNC, callable $callback): array
public fetchColumn(int $column = 0): mixed
public fetchObject(?string $class = "stdClass", array $constructorArgs = []): object|false
public getAttribute(int $name): mixed
public getColumnMeta(int $column): array|false
public getIterator(): Iterator
public nextRowset(): bool
public rowCount(): int
public setAttribute(int $attribute, mixed $value): bool
public setFetchMode(int $mode): bool
public setFetchMode(int $mode = PDO::FETCH_COLUMN, int $colno): bool
public setFetchMode(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs = null): bool
public setFetchMode(int $mode = PDO::FETCH_INTO, object $object): bool
}
```